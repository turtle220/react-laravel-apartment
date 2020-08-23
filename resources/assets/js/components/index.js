import React, { Fragment } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Switch, Route, Link } from 'react-router-dom';
import { Provider } from 'react-redux';
import { createStore } from 'redux';

import mainReducer from '../reducer';
import OurService from './OurService/index';
import Testimonials from './Testimonials/index';
import ActionGroups from './ActionGroup/index';
import Footer from './Footer/index';
// import ImageSlider from './ImageSlider/index';

const store = createStore(mainReducer);

if (document.getElementById('react-main')) {
    ReactDOM.render(
        <Provider store={store}>
            {/* <BrowserRouter> */}
                {/* <ImageSlider /> */}
                <OurService />
                <Testimonials />
                <ActionGroups />
                {/* <Footer /> */}
                {/* <div> */}
                {/* <SlideImage /> */}
                {/* <Switch>
                        <Route exact path='/' component={Main} />
                        <Route
                            path='/wizard/enterLogoName'
                            component={EnterLogoName}
                        />
                        <Route
                            path='/wizard/enterBusinessName'
                            component={EnterBusinessName}
                        />
                        <Route
                            path='/wizard/enterSlogan'
                            component={EnterSlogan}
                        />
                    </Switch> */}
                {/* </div> */}
            {/* </BrowserRouter> */}
        </Provider>,
        document.getElementById('react-main')
    );
}
