import React from 'react';
import ReactDOM from 'react-dom';

import './bootstrap';

import App from './components/App';

// ReactDOM.render(
//     <React.StrictMode>
//       <App />
//     </React.StrictMode>,
//     document.getElementById('app')
// );

if (document.getElementById('app')) {
    ReactDOM.render(
        <App />, 
        document.getElementById('app')
    );
}