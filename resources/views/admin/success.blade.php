@if (session('status'))
    <div id="successMessage" class="alert alert-success alert-dismissible">
  		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status') }}
    </div>
@endif