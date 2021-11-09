@inject('layoutHelper', 'JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper')

@if($layoutHelper->isLayoutTopnavEnabled())
    @php( $def_container_class = 'container' )
@else
    @php( $def_container_class = 'container-fluid' )
@endif

{{-- Default Content Wrapper --}}
<div class="content-wrapper {{ config('adminlte.classes_content_wrapper', '') }}">
    {{--  Flash Alerts  --}}
    <div class="content">
        @if(\Illuminate\Support\Facades\Session::has('message'))
            <p class="alert {{ \Illuminate\Support\Facades\Session::get('alert-class', 'alert-info') }}">{{ \Illuminate\Support\Facades\Session::get('message') }}</p>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('error'))
            <p class="alert {{ \Illuminate\Support\Facades\Session::get('alert-class', 'alert-danger') }}">{{ \Illuminate\Support\Facades\Session::get('error') }}</p>
        @endif
        @yield('validation_error')

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                    @foreach($errors->all() as $message)
                        <li>{{$message}}</li>
                    @endforeach
                </div>
            @endif

    </div>
    {{-- Content Header --}}
    @hasSection('content_header')
        <div class="content-header">
            <div class="{{ config('adminlte.classes_content_header') ?: $def_container_class }}">
                @yield('content_header')
            </div>
        </div>
    @endif

    {{-- Main Content --}}
    <div class="content">
        <div class="{{ config('adminlte.classes_content') ?: $def_container_class }}">
            @yield('content')
        </div>
    </div>

</div>
