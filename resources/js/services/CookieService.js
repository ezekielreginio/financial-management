export default {
  setCookie(cookieName, cookieValue, exdays = 1) {
      const date = new Date();
      date.setTime(date.getTime() + (exdays * 24 * 60 * 60 * 1000));
      let expires = "expires=" + date.toUTCString();
      document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
  },
  getCookie(cookieName){
      let name = cookieName + "=";
      let cookieAttributes = document.cookie.split(';');
      for(let i = 0; i < cookieAttributes.length; i++) {
        let cookieAttr = cookieAttributes[i];
        while (cookieAttr.charAt(0) == ' ') {
          cookieAttr = cookieAttr.substring(1);
        }
        if (cookieAttr.indexOf(name) == 0) {
          return cookieAttr.substring(name.length, cookieAttr.length);
        }
      }
      return "";
  }
}