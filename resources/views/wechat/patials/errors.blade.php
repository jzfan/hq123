
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      @foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
      @endforeach
    </div>
  </div>
</div>