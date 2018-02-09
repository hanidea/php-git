@extends('layouts')
@section('header')
@parent
james_header
@stop
@section('sidebar')
@parent
james_sidebar
@stop
@section('content')
james_content
<!--1.模版中输出php变量-->
<p>{{$name}}</p>
<!--2.模版中调用php代码-->
<p>{{time()}}</p>
<p>{{date('Y-m-d H:i:s', time())}}</p>
<p>{{in_array($name,$arr)?'true':'false'}}</p>
<p>{{var_dump($arr)}}</p>
<p>{{isset($name)?$name:'default'}}</p>
<p>{{$name1 or 'default'}}</p>
<!--3.模版中原样输出-->
<p>@{{$name}}</p>
{{--4.模版中的注释--}}
{{--5.引入子视图include--}}
@include('student.common1')
@stop

<br>
@if($name == 'jenny')
 I'm jenny
@elseif($name == 'imooc')
I'm james
@else
who am I?
@endif
<br>
@if(in_array($name,$arr))
true
@else
false
@endif
<br>
@unless ($name == 'jenny')
I'm jenny
@endunless
<br>
@for($i=0;$i<10;$i++)
{{$i}}
@endfor
<br>
<!-- @foreach($students as $student)
{{$student->name}}
@endforeach -->
<br>

<br>
<a href="{{url('url')}}">url()</a>
<a href="{{action('StudentController@urlTest')}}">action()</a>
<a href="{{route('url')}}">route()</a>