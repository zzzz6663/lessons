
@if($errors->any())
<div class="er" id="er">
    <ul>
        {!! implode('', $errors->all('<li class="text text-danger">:message</li> </br>')) !!}

    </ul>
</div>
@endif
