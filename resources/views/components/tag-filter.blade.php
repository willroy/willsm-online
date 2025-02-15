<div class="relative inline-flex ">
    <button class="tag rounded-lg bg-gray-100 px-2 py-1 m-1" value="{{ $value }}">{{ $label }}</button>
</div>
@pushOnce('tagscript')
<script>
    window.onload = function() {
        $(".tag").on("click", function() {
            if ($(this).hasClass("bg-gray-100")) {
                $(this).removeClass("bg-gray-100");
                $(this).addClass("bg-green-300");
            } else if ($(this).hasClass("bg-green-300")) {
                $(this).removeClass("bg-green-300");
                $(this).addClass("bg-red-400");
            } else if ($(this).hasClass("bg-red-400")) {
                $(this).removeClass("bg-red-400");
                $(this).addClass("bg-gray-100");
            }
        });
    }
</script>
@endpushOnce