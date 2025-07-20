<div id="videomodalback" class="hidden relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true" onclick="$('#videomodalback').hide();$('#videomodal').hide();">
<div class="fixed inset-0 bg-gray-100/75 transition-opacity" aria-hidden="true"></div>
<div id="videomodal" class="hidden fixed inset-0 z-50 w-screen">
  <div class="flex min-h-full items-end justify-center p-4 text-center items-center p-0">
    <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all">
      <div class="bg-white p-2">
        <div class="sm:flex sm:items-start">
          <div id="videomodalcontent">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script>
  function showVideoModal(vidPath) {
     $('#videomodalback').show();
     $('#videomodal').show();
     $('#videomodalcontent').html("<video class='max-h-screen' controls><source src='"+vidPath+"' type='video/mp4'></video>");
  }
</script>