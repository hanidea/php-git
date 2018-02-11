<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Session;
//use Illuminate\Contracts\Routing\ResponseFactory;

class StudentController extends Controller
{
    public function student1()
    {
        //return('student1');
        //查询
        //dd(DB::select('select * from student'));
        //新增
        // $bool=DB::insert('insert into student(name,age)values(?,?)',['james',19]);
        // var_dump($bool);
        //更新
        // $num=DB::update('update student set age= ? where name = ?',[20,'james']);
        // var_dump($num);
        //删除
        $num=DB::delete('delete from student where id > ?',[1]);
        var_dump($num);
    }
    public function st_insert()
    {
        // $bool = DB::table('student')->insert(['name'=>'icool','age'=>'22']);
        // var_dump($bool);
        // $id = DB::table('student')->insertGetId(['name'=>'stu','age'=>18]);
        // var_dump($id);
        $bool = DB::table('student')->insert([
            ['name'=>'icool4','age'=>'22'],
            ['name'=>'icool3','age'=>'23'],
            ]);
        var_dump($bool);
    }
    public function st_update()
    {
        // $num=DB::table('student')
        // ->where('id',6)
        // ->update(['age'=>35]);
        // var_dump($num);
        //$num = DB::table('student')->increment('age',3);
        $num = DB::table('student')
        ->where('id', 8)
        ->decrement('age',3,['name'=>'wjw']);
        var_dump($num);
    }
    public function st_delete()
    {
        // $num=DB::table('student')
        // ->where('id','>=', 9)
        // ->delete();
        // var_dump($num);
        //表数据清空，谨慎
        DB::table('student')->truncate();
    }
    public function st_query()
    {
        //get
        //$stud = DB::table('student')->get();
        //first
        // $stud = DB::table('student')
        // ->orderby('id','desc')
        // ->first();
        // dd($stud);
        //where
        // $stud = DB::table('student')
        // ->where('id','>=', 5)
        // ->get();
        // dd($stud);
        //where多条件
        // $stud = DB::table('student')
        // ->whereRaw('id >=? and age >= ?',[5,23])
        // ->get();
        // dd($stud);
        //pluck
        // $stud = DB::table('student')
        // //->whereRaw('id >=? and age >= ?',[5,23])
        // ->pluck('name','id');
        // dd($stud);
        //select
        // $stud = DB::table('student')
        // ->select('id','name','age')
        // ->get();
        // dd($stud);
        //chunk
        echo('<pre>');
        DB::table('student')
        ->orderBy('id
        ','desc')
        ->chunk(2,function($stud)
        {
            var_dump($stud);
            return false;
        });
       
    }
    public function st_juhe()
    {
        //$num = DB::table('student')->count();
        //$max = DB::table('student')->max('age');
        //$min = DB::table('student')->min('age');
        //$avg = DB::table('student')->avg('age');
        $sum = DB::table('student')->avg('sum');
        var_dump($avg);
    }

    public function orm_query()
    {
        //all()
        //echo ('<pre>');
        //$stud = Student::all();
        //$stud=Student::find(4);
        //$stud=Student::get();
        // $stud=Student::where('id','>=','5')
        // ->orderBy('age','desc')
        // ->first();
        // dd($stud);
        // Student::chunk(2,function($students)
        // {
        //     var_dump($students);
        // });
        //$num = Student::count();
        $max = Student::where('id','>',1)->max('age');
        var_dump($max);
    }
    public function orm_insert()
    {
        // $stud=new Student();
        // $stud->name ='jenny';
        // $stud->age = 9;
        // $bool=$stud->save();
        // dd($bool);
        // $stud = Student::find(11);
        // echo date('Y-m-d H:i:s',$stud->created_at);
        //使用数据的create方法新增数据
        // $stud=Student::create(
        //     ['name'=>'imooc','age'=>18]
        // );
        // dd($stud);
        // $stud=Student::firstOrCreate(
        //     ['name'=>'imoocs']
        // );
        $stud=Student::firstOrNew(
            ['name'=>'imoocss']
        );
        $bool =$stud->save();
        dd($bool);

    }
    public function orm_update()
    {
        // $stud=Student::find(14);
        // $stud->name = 'cindy';
        // $bool=$stud->save();
        // var_dump($bool);
        $num=Student::where('id','>',10)->update(
            ['age'=>40]
        );
        var_dump($num);

    }
    public function orm_delete()
    {
        // $student = Student::find(12);
        // $bool=$student->delete();
        // var_dump($bool);
        // $num=Student::destroy(4,5);
        // var_dump($num);
        $num=Student::where('id','>',10)
        ->delete();
        var_dump($num);
    }
    public function section1()
    {
        $students = Student::get();
        $name = 'jenny';
        $arr =['james','jenny'];
        return view('student.section1',[
            'name'=>$name,
            'arr'=>$arr,
            'students'=>$students
        ]);
    }
    public function urlTest()
    {
        return 'urlTest';
    }
    public function request1(Request $request)
    {
        //1.取值
        //echo $request->input('name');
        //echo $request->input('sex','未知');
        // if($request->has('name')){
        //     echo $request->input('name');
        // }else{
        //     echo'无该参数';
        // }
        // $res= $request->all();
        // dd($res);
        //2.判断请求类型
        //echo $request->method();
        // if($request->isMethod('GET')){
        //     echo 'Yes';
        // }else{
        //     echo 'No';
        // }
        // $res=$request->ajax();
        // var_dump($res);
        // $res=$request->is('student/*');
        // var_dump($res);
        echo $request->url();
    }
    public function session1(Request $request)
    {
        //1.Http request session;
        // $request->session()->put('key1','value1');
        // echo $request->session()->get('key1');
        //2.session()
        // session()->put('key2','value2');
        // echo session()->get('key2');
        //3.session()
        // Session::put('key3','value3');
        // echo Session::get('key3');
        //Session::put(['key4'=>'value4']);
        // Session::push('student','james');
        // Session::push('student','imooc');
        // $res=Session::get('student','default');
        // var_dump($res);
        //一次之后清除
        // $res=Session::pull('student','default');
        // var_dump($res);
        // $res = Session::all();
        // dd($res);
        // if(Session::has('key13')){
        //     $res = Session::all();
        //     dd($res);
        // }
        // else{
        //     echo '老大不在';
        // }
        //暂存数据一次
        Session::flash('key-flash','val-flash');
    }
    public function session2(Request $request)
    {
        //echo Session::get('key-flash');
        // $res = Session::all();
        // var_dump($res);
        // Session::forget('key2');
        // $res = Session::all();
        // var_dump($res);
        //return 'session2';
        return Session::get('message','default');
        //Session::flush();
       
    }
    public function response1()
    {
        // $data =[
        //     'errCode'=>0,
        //     'errMsg'=>'success',
        //     'data'=>'james',
        // ];
        //var_dump($data);
        //json
        //return response()->json($data);
        //重定向
        //return redirect('session2');
        //return redirect('session2')->with('message','我是session');
        //action
        //return redirect()->action('StudentController@session2')->with('message','我是session');
        //route()
        //return redirect()->route('session2')->with('message','我是session');
        //返回上一级
        return redirect()->back();

    }
    //中间件
    public function activity1(){
        return '活动快要开始了';

    }
    public function activity2(){
        return '活动进行中';

    }
    public function activity3(){
        return '谢谢您的参与';

    }
}