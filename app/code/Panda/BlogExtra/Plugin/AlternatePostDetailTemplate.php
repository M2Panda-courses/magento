<?php declare(strict_types=1);

namespace Panda\BlogExtra\Plugin;

use Magento\Framework\App\RequestInterface;
use Panda\Blog\Controller\Post\Detail;

class AlternatePostDetailTemplate
{
    public function __construct(
        private RequestInterface $request,
    ) {}
    public function afterExecute(
        Detail $subject,
        $result,
    ) {
        if ($this->request->getParam('alternate')){
            $result->getLayout()
                ->getBlock('blog.post.detail')
                ->setTemplate('Panda_BlogExtra::post/detail.phtml');
        }

        return $result;
    }
}
