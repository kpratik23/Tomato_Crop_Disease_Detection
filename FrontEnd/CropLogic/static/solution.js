
// document.body.addEventListener("load",Redirect,true);

// alert("Hello World !")

Redirect()

function DisplayDetails(response){


    let DETAILS=[
        "disease_name",
        "type_of_disease",
        "chemical_control",
        "organic_control",
        "also_found_in",
        "avoid_this"
    ]

    let labels=[
        "Disease Name : ",
        "Type of Disease : ",
        "Chemical Control : ",
        "Organic Control : ",
        "Also Found In : ",
        "Avoid This : "
    ]

    
    for (let i=0;i<6;i++){
        // console.log(details["disease_name"]);
        // document.querySelector(`.${DETAILS[i]}`).innerHTML += response[DETAILS[i]];
        console.log("$$$$$$$$$$$$$$$$$$$");
        document.getElementById(`${DETAILS[i]}`).innerHTML=`<b>${labels[i]}</b>`+response[DETAILS[i]]
        
    }
}


async function Redirect(){

    if (sessionStorage.getItem("Disease")=="healthy"){
        return;
    }

    formData=new FormData()
    formData.append("Disease",sessionStorage.getItem("Disease"))


    let url="http://127.0.0.1:8000/api/details/"
    requestOptions={
        method:"POST",
        body:formData,
    }

    try{
        
        request=await fetch(url,requestOptions)
        response=await request.json()
        DisplayDetails(response)
        console.log(response)


    }catch(error){
        alert("An error occured !")
        console.log(error)
    }
   
}
