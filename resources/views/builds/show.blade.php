@extends('layouts.app')

@section('menu')
    @include('partials.modpack-menu', ['modpack' => $modpack, 'activeBuild' => $build])
@endsection

@section('content')
    <section class="section">
        <nav class="level is-mobile">
            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Build</p>
                    <p class="title">{{ $build->version }}</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Minecraft</p>
                    <p class="title">{{ $build->minecraft }}</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Java</p>
                    <p class="title">N/A</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Memory</p>
                    <p class="title">N/A</p>
                </div>
            </div>
        </nav>
    </section>
    <section class="section">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    Build Management
                </p>
            </header>
            <div class="card-content">
                <div class="field has-addons">
                    <div class="control is-expanded">
                        <div class="select is-fullwidth">
                            <select name="package">
                                @foreach($packages as $package)
                                <option value="{{ $package->id }}">{{ $package->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control">
                        <div class="select">
                            <select name="release" disabled>
                                <option>loading versions</option>
                            </select>
                        </div>
                    </div>
                    <div class="control">
                        <button type="submit" class="button is-primary">Add Package</button>
                    </div>
                </div>
            </div>
            <div class="card-content is-paddingless">
                <table class="table is-fullwidth">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Version</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($build->releases as $release)
                    <tr>
                        <td>
                            {{ $release->package->name }}
                        </td>
                        <td>
                            {{ $release->version }}
                        </td>
                        <td class="has-text-right">
                            <a class="button is-small is-outlined is-primary">Update</a>
                            <a class="button is-small is-outlined is-danger">Remove</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection