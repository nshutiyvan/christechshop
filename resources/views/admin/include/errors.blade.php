@if(count($errors) > 0)
    <ul class="list-group">
        @foreach($errors->all() as $error)
            <li class="list-group-item text-danger">
                {{ $error }}
            </li>
        @endforeach
    </ul>
@endif




<p class="alert-success">
    <?php
    $message=Session::get('message');
    if($message)
    {
        echo $message;
        Session::put('message',null);
    }
    ?>
</p>