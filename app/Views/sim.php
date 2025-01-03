<?= $this->extend('layouts/base')?>
<?= $this->section('content')?> 
 <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Apply for new SIM</h4>
                  </div>
                  <div class="card-body">
                    <h6 class="text-center"><u>Notice</u><br>(Compliant with the Digital Personal Data Protection (DPDP) Act)</h6>
                    <ol>
                    <li><h6>Purpose of Data Collection and Processing</h6>
                        We collect and process your personal data to fulfill your request for a new SIM card. The specific purposes include:
                        <ul>
                        <li><strong>Identity Verification:</strong> To authenticate your identity as required under applicable telecom regulations.</li>
                        <li><strong>Service Activation:</strong> To activate your SIM card and provide telecom services.</li>
                       <li> <strong>Regulatory Compliance:</strong> To meet the government-mandated Know Your Customer (KYC) requirements.</li>
                        <li><strong>Customer Support:</strong> To address any issues or queries related to your telecom services.</li>
                      </ul>
                    </li>
                    <li><h6>Categories of Personal Data Collected</h6>To process your application, we will collect the following data:
                      <ul>
                        <li><strong>Personal Information:</strong> Name, date of birth, and address.</li>
                        <li><strong>Identity Proof:</strong> Aadhaar number, PAN, Passport, or other government-approved ID documents.</li>
                        <li><strong>Contact Information:</strong> Phone number and email address.</li>
                      </ul>
                    </li>
                    <li><h6>Data Usage</h6>Your data will be used for:
                        <ul>
                          <li>Providing telecom services and managing your account.</li>
                          <li>Ensuring compliance with applicable laws and regulations.</li>
                          <li>Sharing with government authorities or law enforcement agencies when mandated by law.</li>
                        </ul>
                    </li>
                    <li><h6>Manner of Consent and Withdrawal</h6>
                        <ul>
                          <li><strong>Consent</strong> By proceeding with the application, you provide your consent for the collection and use of your data for the specified purposes.</li>
                          <li><strong>Withdrawal:</strong> You may withdraw your consent anytime by contacting us. However, withdrawal may limit our ability to provide services.</li>
                        </ul>
                    </li>
                    <li><h6>Retention Policy</h6>
                      Your data will be retained for the duration required under telecom regulations or until the purpose of collection is fulfilled. Data not required will be securely deleted in compliance with applicable data retention laws.
                    </li>
                    <li><h6>Your Rights</h6>Under the DPDP Act, you have the right to:
                        <ul>
                          <li>Access your data.</li>
                          <li>Request corrections to inaccuracies.</li>
                          <li>Withdraw consent for data processing.</li>
                          <li>Complain to the Data Protection Board if your rights are violated.</li>
                        </ul>
                    </li>
                    <li><h6>Grievance Redressal and Contact Information</h6>If you have any questions or grievances regarding your data, you may contact:
                        <ul>
                          <li>Data Protection Officer (DPO)</li>
                          <li>Email: dpo@telecomcompany.com</li>
                          <li>Phone: +91-XXXXXXXXXX</li>
                        </ul>
                    </li>
                    <li><h6>Disclaimer</h6>Your data will not be used for purposes beyond those stated here unless explicitly authorized by you. This notice complies with the requirements under the Digital Personal Data Protection Act, ensuring your data is handled responsibly and transparently.
                    </li>
                  </ul>

<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-6 col-lg-6"></label>
                      <div class="col-sm-12 col-md-6">
                        <a class="btn btn-primary" href="<?php echo base_url("sim_form"); ?>">I agree!</a>
                      </div>
                    </div>
                    </div>
                  </div>

                  
                </div>
            </div>
          </div>
        </section>
      </div>
     
<?= $this->endSection()?>
