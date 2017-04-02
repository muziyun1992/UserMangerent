<?php
class LoginController extends Controller{
    //用户登录
    public function login(){
        if($_POST['username']='liyun'&&$_POST['password']=='123'){
            echo "输入正确";
        }
        else{
            $this->display();
        }
        /*
         ///判断提交方式
        if(IS_POST){
            $login=D('login');//D:实例化模型对象

            //create方法创建数据对象的时候会自动进行数据验证操作,如果创建失败 表示验证没有通过 输出错误提示信息
            $data=$login->create();
            if(!$data){
                header("Content-type: text/html; charset=utf-8");//header():强制将HTTP响应代码强制为指定的值。
                exit($login->getError);//验证失败输出错误信息
            }

            //查找username对应的各种信息
            $where=array();
            $where['username']=$data['username'];
            $result=$login->where($where)->field('userid,username,password')->find();

            if($result&&$result['password']==$result['password']){

                 //存储seesion
                session('uid',$result['userid']);
                session('username',$result['username']);
                //更新用户登录信息
                $where['uid']=session('uid');
                M('users')->where($where)->save($data);

                $this->success('登录成功，正跳转至系统首页。。。',U('Index/index'));
            }else{
                $this->dipaly('登录失败，用户名或密码不正确！');
            }
        }
        else{
            $this->dispaly();
        }
        */
    }
}