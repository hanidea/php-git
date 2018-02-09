<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\DB;
use App\Student;
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
}