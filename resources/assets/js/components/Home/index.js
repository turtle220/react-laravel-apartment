import React, { Fragment } from 'react';

import OurService from './OurService/index';
import Testimonials from './Testimonials/index';
import ActionGroups from './ActionGroup/index';

const Home = () => {
    return (
        <Fragment>
            <OurService />
            <Testimonials />
            <ActionGroups />
        </Fragment>
    );
};

export default Home;

