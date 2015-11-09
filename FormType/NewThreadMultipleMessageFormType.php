<?php
namespace FOS\MessageBundle\FormType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

/**
 * Message form type for starting a new conversation with multiple recipients
 *
 * @author Łukasz Pospiech <zocimek@gmail.com>
 */
class NewThreadMultipleMessageFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recipients', 'recipients_selector', array('label' => 'recipients', 'translation_domain' => 'FOSMessageBundle'))
            ->add('subject', 'text', array('label' => 'subject', 'translation_domain' => 'FOSMessageBundle'))
            ->add('body', 'textarea', array('label' => 'body', 'translation_domain' => 'FOSMessageBundle'));
    }

    public function getName()
    {
        return 'fos_message_new_multiperson_thread';
    }
}
