
uploadbtn=document.querySelector(".upload").addEventListener("click",InvokeUpload)
clearbtn=document.querySelector(".clear").addEventListener("click",ClearInput)
predictbtn=document.querySelector(".predict").addEventListener("click",PredictImage)
document.querySelector("#myfile").addEventListener("change",Upload)
document.querySelector(".details").addEventListener("click",RedirectToSolutions)
document.querySelector(".fa-bars").addEventListener("click",ToggleLogout)
document.querySelectorAll(".logout").forEach((element)=>{
    element.addEventListener("click",()=>{window.open("logout.php",target="_self")})
})


function Logout(){

    window.open("logout.php",target="_self");

}

function HandleResize(){

    if (Number(window.innerWidth)<400){
        window.resizeTo=(400,window.innerHeight);
    }

    if (window.innerWidth<700 & window.innerWidth>500){
        document.querySelector(".prediction").style.fontSize=`20px`;
    }
    else if (window.innerWidth<500){
        document.querySelector(".prediction").style.fontSize="15px"
    }
    else{
        document.querySelector(".prediction").style.fontSize="20px"
    }

}


window.onresize=function(){
    // alert(window.innerWidth)


    
    if (Number(window.innerWidth)<400){
        window.resizeTo=(400,window.innerHeight);
    }

    if (Number(window.innerWidth)<700 & Number(window.innerWidth)>500){
        document.querySelector(".prediction").style.fontSize=`20px`;
    }
    else if (Number(window.innerWidth)<500){
        document.querySelector(".prediction").style.fontSize="15px"
    }
    else{
        document.querySelector(".prediction").style.fontSize="20px"
    }
}

function RedirectToSolutions(){
    
    if (check_image()){
        alert("Upload Image first !")
        return;
    }
    else if (sessionStorage.getItem("Disease")==""){
        alert("Make Prediction first !");
        return;
    }
    else if (sessionStorage.getItem("Disease")=="healthy"){
        window.open("healthy.php",target="_blank")
        return;
    }
    window.open("solutions.php",target="_blank")

}


curr_file=null

function ClearInput(){

    document.querySelector(".myimage").src="assets/croppped.jpg"
    document.querySelector("#myfile").value=""
    document.querySelector(".prediction").innerHTML="Prediction"
    document.querySelector("#cache").value=""
    
    for (let i=0;i<10;i++){
        document.querySelector(`#value${i+1}`).innerHTML="0%"
        document.querySelector(`#list${i+1}`).style.width=300+"px"
    }

    HandleResize();

}


function InvokeUpload(){
    document.querySelector("#myfile").click()

}

function DisplayImage(url){

    image=document.querySelector(".myimage")
    image.src=URL.createObjectURL(url)
    console.log(url)

}


async function Upload(){

    HandleResize();


    formData=new FormData()
    inputfield=document.querySelector("#myfile")
    cache=document.querySelector("#cache")
    if (inputfield.value==""){
        inputfield.files=cache.files
    }
    cache.files=inputfield.files
    sessionStorage.setItem("Disease","");
    
    formData.append("myfile",inputfield.files[0])
    
    url="http://127.0.0.1:8000/api/upload/"
    requestOptions={
        method:"POST",
        body:formData,
    }
    
    try{
        
        request=await fetch(url,requestOptions)
        response=await request.json()
        console.log(response)
        DisplayImage(inputfield.files[0])


    }catch(error){
        alert("An error occured !")
        console.log(error)
    }

}

function check_image(){
    image=document.querySelector("#myfile")

    if (image.value==""){
        return 1
    }
    
    return 0
}

async function PredictImage(){

    if (check_image()){
        alert("Upload Image first !")
        return
    }

    url="http://127.0.0.1:8000/api/predict/"
    requestOptions={
        method:"POST"
    }
    try{

        CLASSES = [
            'Bacterial_spot',
            'Early_blight',
            'healthy',
            'Late_blight',
            'Leaf_Mold',
            'Septoria_leaf_spot',
            'Spider_mites_Two_spotted_spider_mite',
            'Target_Spot',
            'Tomato_mosaic_virus',
            'Tomato_Yellow_Leaf_Curl_Virus'
        ]

        request=await fetch(url,requestOptions)

        let response=await request.json()

        max_class=""
        max_score=-1

        for (let i=0;i<10;i++){
            document.querySelector(`#value${i+1}`).innerHTML=(response[CLASSES[i]])+"%"

            difference=200

            percentage_to_px=(response[CLASSES[i]]/100)*difference

            total_width=300+percentage_to_px

            px_to_percentage=(total_width/500)*100


            document.querySelector(`#list${i+1}`).style.width=px_to_percentage+"%"
            console.log(document.querySelector(".block2").style.width)

            if (response[CLASSES[i]]>max_score){
                max_score=response[CLASSES[i]]
                max_class=CLASSES[i]

            }
            
            document.querySelector(".prediction").innerHTML=max_class
            HandleResize();
            
        }
        sessionStorage.setItem("Disease", max_class);
        console.log(max_class)
        // for(var key in response){
        //     console.log(key,response[key])
        // }
    
    }catch(error){
        alert("An error occured !")
        console.log(error)
    }

}


function ToggleLogout(){
    
    document.querySelector(".hidden-btn").classList.toggle("active")

}