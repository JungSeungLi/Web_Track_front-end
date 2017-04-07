function sign_data_check() {

    var passwd_check = /^.*(?=.{6,20})(?=.*[0-9])(?=.*[a-zA-Z]).*$/;
    var name_check = /^[가-힣]+$/;

    if (sign_user.password.value != sign_user.password_check.value) {
        alert("비밀번호가 일치하지 않습니다.");
        sign_user.password_check.focus();
        return false;
    } else if (sign_user.class1.value == "") {
        alert("학년을 선택해주세요.");
        sign_user.class1.focus();
        return false;
    } else if (sign_user.class2.value == "") {
        alert("반을 선택해주세요.");
        sign_user.class2.focus();
        return false;
    } else if (sign_user.class3.value == "") {
        alert("번호를 선택해주세요.");
        sign_user.class3.focus();
        return false;
    } else if (sign_user.major.value == "") {
        alert("전공을 선택해주세요.");
        sign_user.major.focus();
        return false;
    } else if (!passwd_check.test(sign_user.password.value)) {
        alert("영문 숫자 혼합해서 6~20자 이내 비밀번호를 입력해주세요");
        sign_user.password.focus();
        return false;
    } else if (!name_check.test(sign_user.stu_name.value)) {
        alert("한글 이름을 입력해주세요");
        sign_user.stu_name.focus();
        return false;
    }
    return true;
}