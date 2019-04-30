import React, {Component} from 'react';
import CreateContact from './CreateContact.js';
import DeleteContact from './DeleteContact.js';
import UpdateContact from './UpdateContact.js';
import GetContact from './GetContact.js';
import Homepage from './Homepage.js';
import Navigation from './Navigation.js';
import SearchBox from './SearchBox.js';
import logo from './logo.svg';
import './App.css';
import 'tachyons';

class App extends Component { 

  constructor() {
    super();
    this.state = {
      route: 'createContact',
      isSignedIn: false
    }
  }

  onRouteChange = (route) => {
    this.setState({route: route});
  }

render() { 
  const { route} = this.state;
  return (
    <div className="App">
    <Navigation onRouteChange={this.onRouteChange}/>
    <SearchBox/>
      { route === 'home'?   <Homepage/>  
      : (route === 'createContact' ?  <CreateContact/> 
      :  route === 'deleteContact' ?  <DeleteContact/> 
      :  route === 'getContact' ?  <GetContact/> 
      :  route === 'updateContact' ?  <UpdateContact/> 
      : <Homepage/>)
      
      }
    </div>
  );
  }
}

export default App;




// function App() {
//  
// }

// export default App;
