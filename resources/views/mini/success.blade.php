<div id="alert" style="position: relative;margin-bottom: 16px;height: 34px;">
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
</div>