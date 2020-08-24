import React, { Fragment } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Switch, Route, Link } from 'react-router-dom';
import { Provider } from 'react-redux';
import { createStore } from 'redux';

import mainReducer from '../reducer';
import Home from './Home/index';

const store = createStore(mainReducer);

if (document.getElementById('react-main')) {
    ReactDOM.render(
        <Provider store={store}>
            <BrowserRouter>
                <Switch>
                    {/* <Route exact path="/" component={Main} /> */}
                    <Route path="/" component={Home} />
                    {/* <Route
                            path='/wizard/enterBusinessName'
                            component={EnterBusinessName}
                        />
                        <Route
                            path='/wizard/enterSlogan'
                            component={EnterSlogan}
                        /> */}
                </Switch>
            </BrowserRouter>
        </Provider>,
        document.getElementById('react-main')
    );
}
