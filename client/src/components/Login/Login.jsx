import React, { Component } from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import { FormField, Button, Form, Container, Card, Segment, Input, Image} from 'semantic-ui-react'
import "./Login.scss";
class Login extends Component{
  render(){
    return (
      <Container>
        {/* <Col> */}
        <Card className='form-login'>
          <Segment color='red'>
            <Image id="logo" src="/images/logo.png" alt=""/>
            <Form>
              <FormField label="Username" name="username" control={Input} placedhoder="Username" required >
                {/* <label>Username</label> */}
                {/* <input placeholder='First Name' /> */}
              </FormField>
              <FormField label="Password" name="password" control={Input} placedhoder="password" required >
                {/* <label>Password</label>
                <input placeholder='Last Name' /> */}
              </FormField>
              {/* <FormField>
                <Checkbox label='I agree to the Terms and Conditions' />
              </FormField> */}
              <Button fluid type='submit' color="blue">Submit</Button>
            </Form>
          </Segment>
        </Card>
        {/* </Col> */}
      </Container>
    );
  }
}

export default Login;