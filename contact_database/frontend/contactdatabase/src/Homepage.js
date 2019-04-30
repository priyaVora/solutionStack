import React from 'react';

class Homepage extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      email: '',
      password: '',
      name: ''
    }
  }

  render() {
    return (
            <div className="App">
              <h1>Welcome to your contact database!</h1>
            </div>
          );
  }
}

export default Homepage;