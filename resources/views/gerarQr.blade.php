<div class="visible-print text-center">
    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->margin(0)->size(300)->color(0,0,0)->encoding('UTF-8')->generate($qr)) !!} ">
</div>