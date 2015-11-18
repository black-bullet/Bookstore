<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Book;
use AppBundle\Entity\BookComment;
use AppBundle\Form\Type\BookCommentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BookCommentsController extends BaseController
{
    public function newAction($bookId)
    {
        $book = $this->getRepository("AppBundle:Book")->find($bookId);

        $comment = new BookComment();
        $comment->setBook($book);
        $form = $this->createForm(new BookCommentType(), $comment);

        return $this->render('comment/form.html.twig', [
            'comment' => $comment,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Method("POST")
     * @Route("/book-comments/{book}", name="book_comment_create")
     */
    public function createAction(Book $book)
    {
        $comment = new BookComment();
        $comment->setBook($book);
        $form = $this->createForm(new BookCommentType(), $comment);
        $form->submit($this->getRequest());

        if ($form->isValid()) {
            $em = $this->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirectToRoute('book_detail', [
                'id' => $comment->getBook()->getId()
            ]);
        }
        //TODO output errors
    }
}