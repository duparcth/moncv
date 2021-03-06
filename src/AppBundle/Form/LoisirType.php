<?php
namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class LoisirType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array('required' => true));
        $builder->add('frequence', DateType::class, array('required' => true,
        'widget' => 'choice',
));
        $builder->add('lieu', TextType::class, array('required' => true));
        $builder->add('save', SubmitType::class, array(
            'attr' => array('class' => 'save'),
        ));
    }
    
    public function getName()
    {
        return 'loisir';
    }
}