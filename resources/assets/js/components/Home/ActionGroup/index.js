import React from 'react';
import Button from '@material-ui/core/Button';
import TextField from '@material-ui/core/TextField';
import Dialog from '@material-ui/core/Dialog';
import DialogActions from '@material-ui/core/DialogActions';
import DialogContent from '@material-ui/core/DialogContent';
// import DialogContentText from '@material-ui/core/DialogContentText';
// import DialogTitle from '@material-ui/core/DialogTitle';

import './index.css';

const ActionGroups = () => {
    const [open, setOpen] = React.useState(false);

    const handleClickOpen = () => {
        setOpen(true);
    };

    const handleClose = () => {
        setOpen(false);
    };

    return (
        <div className="" style={{ display: 'flex', width: '48%', paddingTop: '90px', marginLeft: 'auto', marginRight: 'auto' }}>
            <div className="container">
                <div className="content">
                    <div className="content-overlay"></div>

                    <Button style={{ width: '400px', height: '300px' }} onClick={handleClickOpen}>
                        <img src="images/action-4.jpg" alt=""></img>
                    </Button>

                    <Dialog open={open} style={{ margin: '0, auto' }} onClose={handleClose} aria-labelledby="form-dialog-title">
                        <div style={{ display: 'flex' }}>
                            <div style={{ backgroundColor: '#2d2d35', width: '190%' }}>
                                <h2 style={{ marginTop: '55px', paddingLeft: '10px', paddingRight: '10px', textAlign: 'center' }}>
                                    Match Me
                                </h2>
                            </div>
                            <DialogContent style={{ width: '1800px', height: '500px' }}>
                                <div style={{ display: 'block' }}>
                                    <Button style={{ marginLeft: '294px' }} onClick={handleClose} color="primary">
                                        X
                                    </Button>

                                    <h4 style={{ marginTop: '18px' }}> ENTER YOUR EMAIL BELOW TO UNLOCK </h4>
                                    <TextField autoFocus margin="dense" id="name" label="First Name" type="email" fullWidth />
                                    <TextField autoFocus margin="dense" id="name" label="Last Name" type="email" fullWidth />
                                    <TextField autoFocus margin="dense" id="name" label="Email Address" type="email" fullWidth />
                                    <TextField autoFocus margin="dense" id="name" label="Phone Number" type="email" fullWidth />
                                    <DialogActions>
                                        <Button onClick={handleClose} color="primary">
                                            Cancel
                                        </Button>
                                        <Button onClick={handleClose} color="primary">
                                            Subscribe
                                        </Button>
                                    </DialogActions>
                                </div>
                            </DialogContent>
                        </div>
                    </Dialog>

                    <div className="content-details fadeIn-top">
                        <h3>Match me with apartment</h3>
                    </div>
                </div>
            </div>

            <div className="container">
                <div className="content">
                    <a href="#" target="_blank">
                        <div className="content-overlay"></div>
                        <img src="images/action-2.png" style={{ width: '500px', height: '300px' }} alt=""></img>
                        <div className="content-details fadeIn-top">
                            <h3>SEE THE LOCATION</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    );
};

export default ActionGroups;
