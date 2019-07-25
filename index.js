let infoForm = document.getElementById('infoform')
let ID = document.getElementById('ID')
let name = document.getElementById('name')
let age = document.getElementById('age')
let phone = document.getElementById('phone')
let qq = document.getElementById('qq')
let tip=document.getElementById("tip")
//检测用户名有没有被占用
//用户名失去焦点
name.onblur = function () {
    //如果不符合正则则直接报错
    if(!/^[A-Za-z][\d\w\-\_\$]{4,}$/.test(name.value)){
        tip.className="wrong"
        tip.style.display="block"
        tip.innerHTML="用户名不正确，只能有数字，字母、横杠，短横，至少5位，并以字母开头"
        return
    }
    myajax.get('data/checkName.php', {name:name.value}, function (data) {
      if(data==0){
          tip.className="wrong"
          tip.style.display="block"
          tip.innerHTML="用户已占用"
      }else {
          tip.className="correct"
          tip.style.display="block"
          tip.innerHTML="可以使用"
      }
    })
}


infoForm.onsubmit = function () {
    //如果没有通过验证表单不提交
    if (!/^[\d]{4}$/.test(ID.value)) {
        alert('请输入正确的账号')
        return false
    }
    if (!/^[\d]{11}$/.test(phone.value)) {
        alert('请输入正确的手机号')
        return false
    }

    if (/\s/.test(ID.value)) {
        alert('您的账号不能为空')
        return false
    }
    if (/\s/.test(name.value)) {
        alert('您的用户名不能为空')
        return false
    }
    if (/\s/.test(age.value)) {
        alert('您的年龄不能为空')
        return false
    }

    if (/\s/.test(phone.value)) {
        alert('您的手机号不能为空')
        return false
    }
    if (/\s/.test(qq.value)) {
        alert('您的QQ号不能为空')
        return false
    }


}