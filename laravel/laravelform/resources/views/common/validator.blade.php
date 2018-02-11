@if (count($errors))
    <div class="alert alert-danger">
        <ul>
            <li>{{ $errors->first() }}</li>
        </ul>
    </div>
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- <div class="alert alert-danger">
                <ul>
                    <li>姓名不能为空</li>
                    <li>年龄只能为整数</li>
                    <li>请选择性别</li>
                </ul>
            </div> -->