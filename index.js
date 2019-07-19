   let infoForm=document.getElementById('infoform')

   infoForm.onsubmit=function () {
      let IDValue=document.getElementById('ID').value
      let nameValue=document.getElementById('name').value
      let ageValue=document.getElementById('age').value
      let phoneValue=document.getElementById('phone').value
      let qqValue=document.getElementById('qq').value

      //如果没有通过验证表单不提交
      if(!/^[\d]{4}$/.test(IDValue)){
         alert('请输入正确的账号')
         return false
      }
      if(!/^[\d]{11}$/.test(phoneValue)){
         alert('请输入正确的手机号')
         return false
      }

      if(/\s/.test(IDValue)){
         alert('您的账号不能为空')
         return false
      }
      if(/\s/.test(nameValue)){
         alert('您的用户名不能为空')
         return false
      }
      if(/\s/.test(ageValue)){
         alert('您的年龄不能为空')
         return false
      }

      if(/\s/.test(phoneValue)){
         alert('您的手机号不能为空')
         return false
      }
      if(/\s/.test(qqValue)){
         alert('您的QQ号不能为空')
         return false
      }


   }