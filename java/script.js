<!-- ここから問一 -->

document.write("問一")
document.write("<br>")

for (var star=1; star<=5; star++) {
    document.write("★");
}
document.write("<br><br>")

<!-- ここから問二 -->

document.write("問二")
document.write("<br>")

for (var retu=1; retu<=2; retu++){
    for (var star=1; star<=3; star++){
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br>")

<!-- ここから問三 -->

document.write("問三")
document.write("<br>")

for (var retu=1; retu<=2; retu++){
    for (var star=1; star<=5; star++){
        document.write("☆");
    }
    document.write("<br>");
}
document.write("<br>")

<!-- ここから問四 -->

document.write("問四")
document.write("<br>")

for (var retu=1; retu<5; retu++){
    for (var star=1; star<=5; star++){
        document.write("★")
    }
    document.write("<br>")
}
document.write("<br>")

<!-- ここから問五 -->

document.write("問五")
document.write("<br>")

for (var retu=1; retu<5; retu++){
    for (var star=1; star<=3; star++){
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br>")

<!-- ここから問六 -->

document.write("問六")
document.write("<br>")

for (var retu=1; retu<4; retu++){
    for (var star=1; star<=3; star++){
        if(star%2==1){
            document.write("★");
        }else{
            document.write("☆");
        }
    }
    document.write("<br>");
}
document.write("<br>")

<!--　ここから問七 -->

document.write("問七")
document.write("<br>")

for (var retu=1; retu<5; retu++){
    for (var star=1; star<=5; star++){
        if(star%2==1){
            document.write("★");
        }else{
            document.write("☆");
        }
    }
    document.write("<br>");
}
document.write("<br>")

<!-- ここから問八 -->

document.write("問八")
document.write("<br>")

for (var retu=1; retu<=5; retu++){
    for (var star=1; star<=retu; star++){
        document.write("★");
    }
    document.write("<br>");
}























