<div class="container">
      @if ($errors->any())
      <div class="alert alert-danger absolute">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
      @if (\Session::has('success'))
        <div class="alert alert-success absolute">
            <p>{{ \Session::get('success') }}</p>
        </div>
      @endif
</div>