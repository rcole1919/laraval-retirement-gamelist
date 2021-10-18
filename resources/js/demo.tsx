import React from 'react';
import ReactDOM from 'react-dom';
import {Provider} from 'react-redux';
import AppDemo from './components/app-demo/app-demo';
import {store} from './store/reducer';

ReactDOM.render(
		<Provider store={store}>
			<AppDemo />
		</Provider>,
    document.getElementById('app')
);
