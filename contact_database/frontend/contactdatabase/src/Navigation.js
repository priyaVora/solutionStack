import React from 'react';


const Navigation = ({ onRouteChange, isSignedIn }) => {
    
      return (
        <nav style={{display: 'flex', justifyContent: 'flex-end'}}>
          <p onClick={() => onRouteChange('createContact')} className='f3 link dim black underline pa3 pointer'>Create Contact</p>
          <p onClick={() => onRouteChange('updateContact')} className='f3 link dim black underline pa3 pointer'>Update Contact</p>
          <p onClick={() => onRouteChange('deleteContact')} className='f3 link dim black underline pa3 pointer'>Delete Contact</p>
          <p onClick={() => onRouteChange('getContact')} className='f3 link dim black underline pa3 pointer'>Get Contact</p>
        </nav>
      );
    
}

export default Navigation;