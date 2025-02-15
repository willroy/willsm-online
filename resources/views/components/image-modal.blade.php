<div id="imagemodalback" class="hidden relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" onclick="$('#imagemodalback').hide();$('#imagemodal').hide();">
<div class="fixed inset-0 bg-gray-100/75 transition-opacity" aria-hidden="true"></div>
<div id="imagemodal" class="hidden fixed inset-0 z-10 w-screen overflow-y-auto">
<div class="flex min-h-full items-end justify-center p-4 text-center items-center sm:p-0">
  <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all">
    <div class="bg-white p-2">
      <div class="sm:flex sm:items-start">
        <div id="imagemodalcontent">
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<script>
  function showModal(imgPath) {
     $('#imagemodalback').show();
     $('#imagemodal').show();
     $('#imagemodalcontent').html("<img src="+imgPath+" />");
  }

  function hideModal() {
     $('#imagemodalback').hide();
     $('#imagemodal').hide();
  }
</script>