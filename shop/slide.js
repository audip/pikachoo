var image1=new Image()
image1.src="/shop/1.jpg"
var image2=new Image()
image2.src="/shop/2.jpg"
var image3=new Image()
image3.src="/shop/3.jpg"
var image4=new Image()
image4.src="/shop/4.jpg"
var image5=new Image()
image5.src="/shop/5.jpg"

//variable that will increment through the images
var step=1
function slideit(){
//if browser does not support the image object, exit.
if (!document.images)
return
document.images.slide.src=eval("image"+step+".src")
if (step<5)
step++
else
step=1
//call function "slideit()" every 4 seconds
setTimeout("slideit()",4000)
}
slideit()