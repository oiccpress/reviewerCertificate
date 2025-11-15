<?php 

namespace APP\plugins\generic\reviewerCertificate\classes;

use PKP\mail\Mailable;
use PKP\mail\traits\Configurable;

class ReviewerCertificateMailable extends Mailable {

    use Configurable;

    protected static ?string $name = 'plugins.generic.reviewerCertificate.stats.emailTemplateName';
    protected static ?string $description = 'plugins.generic.reviewerCertificate.stats.emailTemplateDescription';
    protected static ?string $emailTemplateKey = 'REVIEWER_CERTIFICATE_AVAILABLE';

}