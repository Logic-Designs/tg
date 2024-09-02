@if(session()->get('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <div class="d-flex">
      <div>
        <!-- Download SVG icon from http://tabler-icons.io/i/check -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
      </div>
      <div>
        <h4 class="alert-title">@lang('admin.Wow! Everything worked!')</h4>
        <div class="text-muted">{{session()->get('success')}}</div>
      </div>
    </div>
    <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
  </div>
@endif

@if($errors->any() || session()->get('error'))
<div class="alert alert-warning alert-dismissible" role="alert">
    <div class="d-flex">
      <div>
        <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v2m0 4v.01" /><path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" /></svg>
      </div>
      <div>
        <h4 class="alert-title">@lang('admin.Uh oh, something went wrong')</h4>
        @foreach ($errors->all() as $error)
           <div class="text-muted"> <strong>* </strong>{{ $error }}</div>
        @endforeach
        @if(session()->get('error'))
            <div class="text-muted"><strong>* </strong>{{ session()->get('error') }}</div>
        @endif
      </div>
    </div>
    <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
  </div>
@endif
