import React from 'react';

class GetContact extends React.Component {
  constructor(props) {
    super(props);
  }

  render() {
    return (
        <form style={{display: 'flex', flexDirection: 'column'}}>
        <label className="pa4">
          Id:
          <input className='f3 link dim black underline pointer' type="text" name="id" />
        </label>
       <label>
        <input type="submit" value="Get Contact" />
        </label>
      </form>
    );
  }
}

export default GetContact;