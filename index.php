<html>
<head>
	<title>IRS</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<link rel="stylesheet" type="text/css" href="style1.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style >
      body{
    background: -webkit-linear-gradient(left, rgb(0, 0, 0), white);
}

     .form-control {
    border-radius: 0.75rem;
}
</style>

<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen()
{
    var pass1 = document.getElementById("password");  
    if(pass1.value.length<6){  
        alert("Password must be at least 6 characters long. Try again!");  
        return false;  
  }  
}

</script>

</head>

<!------ Include the above in your HEAD tag ---------->
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="#" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp IRS HOSPITALS</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="index.php" style="color: black;font-family: 'IBM Plex Sans', sans-serif;"><h6>HOME</h6></a>
          </li>
  
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="services.html" style="color: black;font-family: 'IBM Plex Sans', sans-serif;"><h6>ABOUT US</h6></a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.html" style="color: black;font-family: 'IBM Plex Sans', sans-serif;"><h6>CONTACT</h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="https://samriddh2703-irl-optum-project-multiplediseasepred-xpk6es.streamlitapp.com/" style="color: black;font-family: 'IBM Plex Sans', sans-serif;"><h6>&nbsp  &nbsp DISEASE PREDICTOR</h6></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

	

<div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
                <div class="row">
                    <div class="col-md-3 register-left" style="margin-top: 10%;right: 5%">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOIAAADfCAMAAADcKv+WAAAAh1BMVEX///8AAAD8/Pzu7u57e3sQEBCjo6MeHh4HBwegoKD19fWRkZH4+PiHh4fj4+P09PTa2tq6urpMTEwoKCjp6enGxsY/Pz9bW1tqamrNzc3W1tY4ODglJSV0dHS9vb2Ojo6srKwxMTFsbGwVFRVFRUU9PT2YmJiDg4NgYGBTU1OqqqouLi5KSkqfbLI9AAAYmUlEQVR4nO1dZ5uyvBIWsIMUBRUrlrXu//99hxDITAqd3XefczmfdgFD7pTpGXq9D33oQx/60Ic+9KEPtSTdTWn6X/eke7Jvpmkezb2WUvBfd6hTcoOnJtJN8dxBux5C/+9Pr3GPuP/d2XknAdTmtvzLSXLna3U23d/pan1yDod73MfRAV2z9zI88oy8TI0ZfmD3iLzw97pehRwjWn3T3j3Q5XCrRKhFcgtH6aHLarWaOIb1SxCKKZggKC+4HqkBaqbUgn7PeTQespdn/CIWFfnREvdoqbM7t5xOH6U2XJkfYdpdX67/m5g4smcnrjfjiN3aKNgMoafEavSc9YzpdDQVLOrnye2LPbmy0Z5e1X2dO2IrhponKWjw+m0e9BpInYiye46EPh0DWSLgBf01NBcDuVmg9f71i5LTkzsw2mQ3J+oermTWgZnSPZ5ix/eH+/48H+VuEvwcm/VxBzcL+e2Z0mIN1b07yjPgwpYd97NFrPecIPAe25ztrF0n9k+wWft1056wkYyV4tUevefk7C5PbtVC0/UQJscyXHP2nYPyNDnIrbUhP9peSMPQrDuSX7tK772UnVptFA0jgXhSCgbLHc5zONf10N1U6reMrcM89MfSK3fpXVs56kdVf2wQqgPFHFOaGpObWnLOO5pJF7G8PltLF/mFMyr2N1/yrYspyYqEEFcq7q1ue4+HYuGsQ73wd1XIMfGeX2c93cicfUThH+SObId58gxBZI8Ys+OeEj/xlhUOH9JrT201Akm8pWJNn4mv0i6J+aBL+vRp76lnUIDIRs9Ys2sP8XndNUVxshKfqUe+tNFTiNZavLFLFprL8dn3dhUdCkcZC5d9dtFll8aK1esE/S3mA5d2DgRZk04hbkS1MumMfYRFvbzfI9vPnz9KPm4n4zf+A2ArhbwfvdHPZLW+BslGXAZRxB7r1na4ooO7mO+jjVtRAXFPqJXMyjrIsAVykFxS6ISVKcRjxUF0HsLl4JCaHCfztnHqMDmsBi5SyenCi/s5Q2WgvkXNIarsVAqRG3tChNF9P+6uW7YyZTpgjp3uK2BmA6Yv6K7hhEEQpgoCGhqVr6siqdQwV2yf0ug9i3yrmYjCGvuWig7YBwMmS6zVdR4L48FyHZGZtUGzezeXGyp7iEI8cNfe55vdwiq3IiTsFskLbCYZxkP23IZpQmvyNsQomluRubNoYz64vbV2OmAJNIriC/oZ/oelDxKGLE3EKfaNTchciCC4tP2kA6+Kz62Xm54DMWDikMgJHbr3qM8BUlLIjASinnLsy7xYrtegIc9zyiB+k4uwhxeNLY5AofYSBuefkj/Xh1qDp+s925wdGc3C+FJCCUb0jlGElKcYop6ysYDt2cQBBF6tUXOjSvZOPEljB2Lvr2rtcT3YjxYLwf5aJLQ7EfFuccrEjjw5GF0uo+Sp3dwjpiEwOWqaA0+KGkN0JA9KolCR0evX2uETlYuATQld7bxFaA6jcBNTlK3gZ4Ck5TKZNo8ZdF/NnTmuqIoScyCKxcSr/LdAhmyWYFpQXdvmeE7ERie7MtjDvtknS/fAIF5b+KsOwtqK2XM00va11r5sXwl0zJ7DL8vsDldhe6f6jMscZMvGLDV+raDHmD1vrM3kBqMCVTgoQQimQoT5W0SvKWzv7Bdg6rWzi21O4x7FK7cvPGG4/cUoB6Lr2ptMfm2vx5BRsF4xOfFk+5qb75ueB/GLKq4+YxXXdt4N0fD/4hxpunN7XrL9j6/r9u143C9273RmRn2Dm3xrCjuUGb4WxnhJeLZqoe4zKZJdGExaQYw3JMfshuiOHq4pgju/341gdRJG/+QFhA4gawDiEX6NPT8jMruq+FaUPhyyK+v6qPgeW0iVe7I1ofs3toh5F+kmP5i2jdhTIO2/kRKI9Y37tGctFW1kSwYgnutDjEwOpANjyXbi5o48/tx2NxRaUUbI0aKzrXTBP0f2/NZHsk+7rGi7A7aOQFcWHekV6KZ987srTCfsknoaeFm34hQBH3XyZHqUoseJ9HCExg423h2zC8Tf9tgI6ffsF5nTwSR7OtUkY/qqz1LjWbvynq00CkiR6x6/FHlHGYM4MH14teOHSY9AqMKa5JRM5NbQzsjtTJraUORp12w2xXLUsgpETZtws28lShhRUq1AVHr40WAQt4KhRfd0xg97Buv/CD/oK1xGWrZD0g18TXyzPmtg2WgWCUa+52Tm5kbPOYui6sRLRQZRkshOIqwzr5oFziHMpi2lNpR6OJgq/iTDCvu2vv+GQrzwqqg7Jv5pW/S+SZlCDOIusn0bkU+jNNts525YC0+8YJRhH5POPRhUZOLaQ4wb5tZ4rIDv+if59TNeuTDgkd1pgehElyCLQflsMz654KwC4SDdCxtYxa92EJl+v8IYrZzQaCT8WhEi5yibM2Tc4y66ip9kGzgESRXvmRYQp4DlhE1fdSqNJJTCooQEQpniDWOBFV+kt2dzts12O4KohQhiba8/diImLrGUHKVpuxd/niRD7R7nNaEzc3iO9uuUsj0OYM6w1n1QaK4GHdQxmyQeYsBU+e+6LJXzkyJPrOQFT0hO+IpGw4D9ysrGZS49ZwDrigAiiKRnOtHwSx4i+FvbQdSW2VqdKvfiU1aedE41MrMnZXsAvEMgNkBnSdYHmcfdLJO8PESXTbgq/bOQhISTXUCXkZqNlPqpGMS7dAuSbs5MBwSGnOzAkBuCziD2hLwZarqp8w3NUnOUQZzJ92Bzs5GKwOtE+m2kbJdGkbuDKLLOZDx9lQURlTdWBBHEBoskQmT6auC+PPwCiCXZEBUgak+fOcExfVUJXxZBNOEN2f4FiA9yCYxCIlhwzJODmJvSUhki6Z6c9fWotDyKIIKr9hKll8C4SFoHwUJ+jrSb2A6ntktXEHehIqpYLWRTBFEHsbGlV9Ba8XmIRLwjXh8zAZSJVhuiJ+snc0P0Fq4qBtmLICKeuqCYkWAiEBGPIxDRMEc97P+pDVFyg8e0FFSbe1UztBDiFHhY0ksIlGpDwqunMM0CxGE7iFZxtrZGDKXKjRVCRNJ/TXQID1ziibhHyZzdQlSGTzmEqrTERhCRG43MGrKHE4jIVUx0HbQX20K0Fbl6iPZ1fCXFECEyQeL6AFg7E5Ghg1TZxpAdkKMCxPo5jVb+yYnYPr3V8ukVQ0QrdcYZUok5gvyoJC6ATUkeYgN/+LQAYc0RK4EIPHXuI6ObepyQ2UG8bPkQxw1yDtSpwYQi/sHSGS2BaAOnPhiw8/qJ7osE9MwqgrhrEAzXc5L0xSVxyMvhqgoRKXFDCNKkwW0huwZDJB6jdhDV6cGp0cHIW2vzMlOjDCJSDC9MZFzpPeQN3wgQCQ9tCxEvIUZcgCQgr3i2hagrQjNpJq2F9DvyGuScS04ItoaoSL3ZopYcynVbQ+wp9Iz0iCPaisliQbN46QgijgwlBM5jPUhHuD1ERVZo6jBCQ5y4DJBMSZJ8u4DY23C502Bb2Kzj7SEa8kqdWQLEAdH5DXxwxeHcWxWtHiXpM2TsZ14MC6mS87YcVXVyJzViAOKFcBvkZ08aQ/ZiG4gcx8tODOH4/6P1LCpc/BQiChknoslABhDxAbiwxFpG+8F9SiFyCuy7reiPaSpOY6o/ianDKC43Il1p47sRKMtselI7nNueu1KNvByidOw4kiAmV2xwTiWuqxa+G0tiT14yfndFd0ZdQLT5AyGPdGOhVyUQkYn33RLiYTQRQQYEY7z+p6IJ8tUFRMFZlIYwkDlMI1NIgCaxojYQY+1C5FDuF+kjipd1CpFTiLMTyS6w7STypCOIqwQiTH4DiNpgJngQ/YW2nZiaSMgbPo0mCmInA7WtqbqfhO11zKOzOBSkEdPRQSrCOHHstIBIt/mJ/5k6Bo+zispCpzlErCLseGNnNVHiSyITPJAhi4SPo71aF2J2aunMsWJDef4eLA+/1KelpiR5ConALJjnwCM0AQzN9C6J8iCbtrbvJtsaowmW66qKEii7Pq/gRClFyQAdrukQZhvEBvt4JUKkSbYAUVGZpISAwe3RjlSd84azaY589LYiXVP27XjDNyT94UBYcpARO/vfAsRnbf0N8fAdWwLK7Fd2VxXVqUo3tlasKTt2hWQlzVFCDsYxfS28smXwLTWgHElexHRi3MavUCkjjwYqwYPibDQxGnUqTQxEnq3aEA/YTEyr9PiKWgUofi06l5f3WUogNLJLR9F6Gir6gHZekkaIU2IoRLSU60PkPcWJyitZx8kdaFnUpMEDwoQNBMLFBXGVDVqsZCRjjM66pSsX8aNrbYhiagbJplR5WCCjR2KnUKFJ1m4O4sOKvBnU4C4BhBzlqTfeBgXvUdvol/z9sQ4zlLnNmTWsqDnBUmkkiI7sapfTghH3ukmDmG6dt/BILRJ7PIq4s60pwdDJ8wImnARRcaxB9rAjCZXIPENuGjmrGkCUuOfFM8TjRVfQ3eC4yWXFuEumvYoQHfbwacX2913wHWwEg5+DOKBOAbR0G0C8SXL84gnLC9siEFVeTeFAvK2G6GYPj10dXMFCNA/NNPVZYIhpEnE7iNNSfXOJEOqwhtdpXi0hk6YLsUlLIU4YRB2tFoFhgEqf5n1j/04KCF2Sk9RKST70JiLEow7vumx6FhNoi1RAn94DDBFy8/Te5sR+yWmZSLWhnIjLMDTFYaivoublLAKtcU4/Gg+iL7MlNQLd73ZbZXKR+Scv8Y7S4T1b/H4h/h03ilwfX9S6QclyDdLfe5ZKWwPiXXps5dGgjsHUINxry6flKFhiI03JQopvhJ72xOR9vKzS7FDIfkeVy2pQ4Xk14fgiDAdNVAMJprDiwK5NWkEMZ43clSd2NfVE41Nx6VZEE9sgw5+zRyUS3LJIJtMtETJ2fJbdyGvxYfg1qDgg8QYpF0Ibh+WJw2JucKCoEOJE6DcI6TvdoZAosJPYAEppow8jlx64r8CoyHzt6FzBV8oHkNLcCGKuI2Yp5p9u4E1D6bdnwVcOpfsYB5UWAVdrJnsbEmKZNh/AixucfOvx53owiZ5ClDbCaqih9GNBMYMtzioSoYKFM1EfYvoF0lh3WV4asIBTw3owOa4YEaINfADGEk6M8KXPHDYZaAkjzx7tKiSF7bJJROYwM+BO7FLT49KqPDgNnPEZTRhveaMZA9uO43W+6iAXkoFRcgHWeTaePuI22VRbAHHZ9EQ4aB4c8fwU5kubI3UARAOuAIAOh3uIZ8F4UC2FQWSHC0IkMjK1CjnQFYy7IvnKLLElN40opQJvO/DknJDuiTyxWCNFLmCyQ0FiwFlx9P507SL/+bxFVT+VFcgf5UO5ldyxbINtugHSkIGNHLmHoRFytDyFOIaZRgFvbZauCvCfL1uVqHZV2jjOJQKf/IW3hmAqEC+AnnKSx0Jr7t6bHrV3f2baOowCLgDJFKYM4q1F3QJCRqDQx6F/IYgmoa4OYrRs80J5ogU/HkiLi1X3MBTVMeSMy1QbWswktlY6KHyrR5JfCnI0kH4gqqNwKzu1hnRK0akoGcB8F5B7k50fSxb9SFnMsj45N2G5sgOIiN2fxdIpoHsM5Mi9OB7IRzqQp8UFrg3HwQnEWXeFqKceX6IhUwmRf0gKjyKOR7UeH2TDWpJjSLRLai32QECxir12jToDmJAzXKM9Txuf4mN40i/E4B+k6gzkvqHUGykPyloJLRHatK/qJZO+gSrvRxGEVAOTy81PBuAEU6FQRtAyiYRbUC6E9wz8COleqvouyIYBP1RaV1MgiIrGVoUOMnakYoKQIg7HqVOCfTqun+Ren6xN9HynCwZNomKdcrrMHK+2t3KJwaK/CEAA4rmlCKxKuj3pk+AwTgAc7Y9p7sKhZw/TP3GYRcdm+/WWZjLYvUP6p/lAjtstp64Y0E7HRaYLyXf1vOrnO+VZ6etcFUMe5BQG57yi2WKZn8Nf/vKEq4pUdURc2SAqT87etH3h5ZqkD89V48LL/czwb+cy73NGi/UEMRyrf93ff6TYexWQtncuKG1D6XIaelTl1A3vtVXVA+NotPJcbrp01//16ePIONyL/OYP0+aY4NSeyCU6gN59r1aJ3N8iK7jPVZO5u942iv5a7u2qenz89fD+u2+flJIVmqYwO/vbJrem4TQ0hRDtZXb0jL84fzzZtn1cJbQO7VIHvG1v9vTpmW3/h5+uqUv61IppWlF8pU///cn70Ic+9KH/E5puwsmDFjta7YNQdAu714ZfYtArUJ1nuR/UofD+4NXaxfkeoKZiS7vg3EABZe7A8UBB6b2vrBPp/6pHObo8Jsfo4NXwzntPdaLy4BRlvpFX4dGIAvIjUily8lRarKdjUkYys8Adjzx8rJxwu3g8jkYV2wiVqb4sFl/n5eINuu3l0XcNwz5emkLMem8f5VDxS909o9CEEGh8OZZNZgAuuVU/sG1DN2w7vPfRUA64hKXGZAgfsbkXdO3FGRDv6/X6/Qooec+r8Jmc8axoJiED6yR8ZskPPMGuaQsRha4JFWe24rMqg41hoPXoGIbX57061/wyHRD+3yu+YOwEnG++NUQumbfEBYYTdUeqnt/48c87VskiHIu8sJOLkrvaQ3QQ096W7CA0uiOljBA+AKterCxgespP3rNU2TpNCdWEUBRy4wkZumqIQhl75cKHAx+FBWeGmUDpFqJYFV0kdI4rB6J4UlGRmc9c/7NiZSFzVf8uRKhSlw9R5zGakv3MlkJZ/DctHvG7EIegjeRCxIXeNEXElH0JpLQ8SRpa/YsQA054rIUH2U6scIx98lch8mej34LgY/xIdchI7Nvjj0IU0nn45HybqRryN5plMv8NiHwXAwilVkg3IWdH/gGI/PkDVDajQk47qXf4z0FEsyjnbsgUjv49iPho+Lsc4/T6L0AUuog1vNGkbK3GI/IPQBSEA5+T/ixR/PV7aafK6Qcgcii2ohLDB9jfk9wAF+3erd3nXpM2uhf9J26exAfF85vf3k8HdrqHGHHf3JUsJvlLwd/3nw3OdQ+Rc3kpag4ozjI9vZ/MR+kaosEZxarPu1uqryFsO/vWo6JL3ULkq4Wd1IZ9pEgGGHyZ7g9tym4h8p/FWefNjPqMyOXp/chUdglxesMBikGB58LPqSS8LXLkNqUOIW74fhdmXio3ZAKy6CuBzagjiIbf53bh161szW3uOalZl7XXbb5Ye4hWEEXRihMVu30VSRfmJWaN58Mup7IhRO26MkPv/FytVgLruJz6ldOkgvxYUEfHFwg1hajRj6PzNN/v9xujhhh38r8U+z3sCmRjiGMFzAYqsx7289Ift23PEqXUEOL45ZKP7m7cAB+f/xLPIVciPzdAOz92ob02ZTfsIj7T1TRH357lJb7Oa1Taz6P2HNXltlND886KRjkf6GqfE9+BXJzinIFtUx3MDqVPBtI3tT680YXoP5xQlxoVi6C0MZXrta3d34l24+J5rPdxap78iaKO2ajW97xl6kaBCzDGRxte73p4SVBSn9+pTB3pqAeswG1bscHpS6o31M4L15WlwRV0bOn7NCJhJsuSEEqa68qY4spZFdRTr5RapfM5A00KM6E3dmYvcoes8jn981HsOaWk8wXA9lV+k0fdQeQ/i5cbId0uqnFcrpJn/YKFiLp0bHCWvJzIQGkpFkXKI9zaoI1s7BIi//mqSN3IUltV1NUxxjYqTqceOH6tRspGlvQ7EhUIl4b7MxBxMUxN2yk30LJybT7n8Rch8mWpR6rpiiHOK4o5OM18alOHonOHP8aoKm62rD4nqBzzX+GoCYV4rV7l+SIQl3XlhliYsxZ1H5nivPniB+/TEGo1Bwgs1Fa2xg9EibnCXWtxwhKI1b4MyLS4Zys/VdeZjIRC7FP7FuaRBsLV3FZoJmtCLHZQk+pARFJPlTgN9MIKpvBdizTWX16rx2Gp+atSFMUNoREvg4irCxXzfS6j4c1NQpbOwD5xm0NQY0/ez/Vogwa8bIdgC6ckJ5jzKg8mSF9lGRvjYdHrbDaHOXHY6sSpXMVrHid38UViZdL5r3PsYdJxUsrNzhsoSKRft/UWcw6J4m/GC1/BK7FSp8Ihl1kW5ubybsZzZaDNZrbnuJUxTEisr/nMXxTCV4a0XUm+jPiFkV2ftv3NX9aukc3XZ/DtIUjWpo5i3XGmMflDRTnf521D7jnZ7tGn5FnDO8qn1L5MN3k0T2hJX5K53ia+HS+buWmadzyb37fbLXrFFA1v6BjBqXlII1jOCeXUQnmTe99Zia3w+R3/K6UDoUfny5yp1xUB/WU8Qe/ked8O1oU1OUZmC4dsle/wZGWg3PJHc/ODDWXRZ1xe233NVI/E9Hi1YqS6UU5OjWdzN6Xyx8K6Ngx7/Vgtr/NTgv95vT5Wd7tOHPYfIcOwbHI0NNTFIfjQhz70oQ996EMf+tCHPvSh36T/AZ1JhpviNfr/AAAAAElFTkSuQmCC" alt=""/>
                        <h1>Welcome</h1>
                       
                    </div>
                    <div class="col-md-9 register-right" style="margin-top: 40px;left: 80px;">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 40%; background-color:black">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Admin</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register as Patient</h3>
                                <form method="post" action="func2.php">
                                <div class="row register-form">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="First Name *" name="fname"  onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup='check();' required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                            <a href="index1.php">Already have an account?</a>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  id="cpassword" placeholder="Confirm Password *" name="cpassword"  onkeyup='check();' required/><span id='message'></span>
                                        </div>
                                        <input type="submit" class="btnRegister" name="patsub1" onclick="return checklen();" style="background-color:black" value="Register"/>
                                    </div>

                                </div>
                            </form>
                            </div>

                            
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login as Doctor</h3>
                                <form method="post" action="func1.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username3" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password3" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="docsub1" style="background-color:black" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>


                            <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login as Admin</h3>
                                <form method="post" action="func3.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username1" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password2" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="adsub" style="background-color:black" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </html>

  