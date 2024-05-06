import React, { Component } from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import { FormField, Button, Form, Container, Card, Segment, Input, Image, Loader} from 'semantic-ui-react'
import "./Login.scss";
class Login extends Component{
  constructor(props){
    super(props);
    this.state = {
      isLoading: false,
      username:'',
      password: '',
    };
    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);

  }
  handleChange(event){
    const target = event.target;
    const name = target.name;
    const value = target.value;
    this.setState({
      [name]: value
    });
    console.log(this.state.username);

  }
  handleSubmit(){
    let {username, password} = this.state;
    if(username !== '' && password !== ''){
      this.setState({isLoading: true});
      console.log(this.state);
    }
  }

  render(){
    let {isLoading, username, password} = this.state;
    return (
      <Container>
        {/* <Col> */}
        <Card className='form-login'>
          <Segment color='red'>
            <Loader active={isLoading} size="massive" />
            <Image id="logo" src="/images/logo.png" alt=""/>
            <Form>
              <FormField 
              label="Username" 
              name="username" 
              control={Input} 
              placedhoder="Username" 
              required 
              value={username}
              onChange={this.handleChange}>
                {/* <label>Username</label> */}
                {/* <input placeholder='First Name' /> */}
              </FormField>
              <FormField 
              abel="Password" 
              name="password" 
              control={Input} 
              placedhoder="password" 
              required 
              value={password}
              onChange={this.handleChange}
              >
                {/* <label>Password</label>
                <input placeholder='Last Name' /> */}
              </FormField>
              {/* <FormField>
                <Checkbox label='I agree to the Terms and Conditions' />
              </FormField> */}
              <Button fluid 
              type='submit' 
              color="blue"
              onClick={this.handleSubmit}
              >Submit</Button>
            </Form>
          </Segment>
        </Card>
        {/* </Col> */}
      </Container>
    );
  }
}

export default Login;