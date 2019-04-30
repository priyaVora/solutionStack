import React from 'react';
import './App.css';

class CreateContact extends React.Component {
  constructor(props) {
    super(props);
  }

  render() {
    return (
        <form style={{display: 'flex', flexDirection: 'column'}}>
        <label className="pa4">
          Name:
          <input className='f3 link dim black underline pointer' type="text" name="name" />
        </label>
        <label>
          Email:
          <input className='f3 link dim black underline pointer' type="text" name="name" />
        </label>
        <label className="pa4">
          Number:
          <input className='f3 link dim black underline pointer' type="text" name="name" />
        </label>
        <label>
        <input type="submit" value="Create Contact" />
        </label>
      </form>
    );
  }
}

export default CreateContact;