@extends('layouts.app')

@section('menu')
    @include('partials.modpack-menu', ['modpack' => $modpack])
@endsection

@section('content')
    <section class="section">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    New Modpack Build
                </p>
            </header>
            <div class="card-content">

                <form method="post" action="/modpacks/{{ $modpack->slug }}/builds">
                    {{ csrf_field() }}
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Version</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded">
                                    <input class="input" type="text" name="version" placeholder="Name">
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">For Minecraft</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded">
                                    <input class="input" type="text" name="minecraft" placeholder="Name">
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Status</label>
                        </div>
                        <div class="field-body">
                            <div class="field is-narrow">
                                <div class="control">
                                    <div class="select is-fullwidth">
                                        <select name="status">
                                            <option value="public" selected>Public</option>
                                            <option value="private">Private</option>
                                            <option value="draft">Draft</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label">
                            <!-- Left empty for spacing -->
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <button class="button is-primary">
                                        Create Build
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection