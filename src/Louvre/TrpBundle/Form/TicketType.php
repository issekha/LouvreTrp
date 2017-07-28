<?php

namespace Louvre\TrpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TicketType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('tdate', 		DateType::class, array(
				'required' => false,
			  	'widget' =>'single_text',
			  	'format' =>'dd/MM/yyyy',
				'input' => 'datetime',
				'attr' =>[
					'class'=>'js-datepicker',
					'readonly' => 'readonly'
				],
			))
			->add('ttype', 		ChoiceType::class,	array(
				'choices' => array(
					'Journée' => true,
					'Demie-journée'=> false,
					),
				
			
			))
			->add('tnbrs',		IntegerType::class, array(
				'attr' =>[
						'value'=> 1,
						'min'=> 1,
						'max'=> 20
					],
			))
			->add('suivant', 	SubmitType::class)
			;
    }
    
    
}
