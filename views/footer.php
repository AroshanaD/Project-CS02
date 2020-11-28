 <style>
 

.footer{
    display: flex;
    flex-wrap: wrap;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    z-index: -1;
    justify-content: space-around;
    background-color: rgb(39, 39, 39);
    font-family: 'Nunito',sans-serif;
    color: white;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.3);
}

#about-us,#services,#contact-us{
    display: grid;
    flex-basis: 30%;
    min-width: 300px;
    padding: 20px;
    text-align: center;
    font-size: 14px;
    place-items: center;
}

#about-us,#services{
    border-right: 1px solid rgb(253, 227, 203);
}

@media(max-width:768px){
    .footer{
        display: none;
    }
}
 
 </style>       
        
        
        <div class="footer">
            <div id="about-us">
                <h3 style="color: coral;">About Us</h3>
                MedCaid Hospital has been a trusted leading name in Sri Lankan healthcare industry for more than seven decades.
                Our vision is to provide the best healthcare services to our patients.
            </div>
            <div id="services">
                <h3 style="color: coral;">Our Services</h3>
                Health Checkups</br></br>
                Laboratory services</br></br>
                Pharmacy Services</br></br>
            </div>
            <div id="contact-us">
                <h3 style="color: coral;">Contact Us</h3>
                +94 (0)11 2140 010</br>
                +94 (0)11 2140 050</br></br>
                contactus@medcaid.com
            </div>
       </div>