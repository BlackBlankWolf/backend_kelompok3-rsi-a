import React from "react";
import LandingPageLayout from "../components/Layout/LandingPageLayout";
import Deskripsi from '../components/DestinationPage/Deskripsi'
import OurFeatures from '../components/DestinationPage/OurFeatures'

const LandingPage = () => {
    return(
        <LandingPageLayout>
            <Deskripsi/>
            <OurFeatures/>
        </LandingPageLayout>
    )
}

export default LandingPage;