<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Book;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadBook extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $book1 = new Book();
        $book1->setName("Объектно-ориентированное программирование в С++");
        $book1->setAuthor("Роберт Лафоре");
        $book1->setDescription("Эта книга помогла множеству пользователей освоить технологию объектно-ориентированного программирования в С++. Роберт Лафоре рассматривает все основные принципы языка. Представляет полномасштабные приложения, приводит наглядные примеры, которые поясняют теорию. Представляет сложные новые актуальные возможности объектно-ориентированного программирования в C + + . Рассматривает создание сложных и эффективных объектно-ориентированные приложения. Книга рассчитана на то, что вы знакомы с основными понятиями программирования, этого достаточно, чтобы понять синтаксис и особенности языка. При проектировании модулей C + +, вы стараетесь увидеть весь мир в виде объектов (например, автомобиль является объектом, имеющим определенные свойства: цвет, количество дверей и т.д., а также определенные методы: возможность ускоряться, тормозить и т. д.) Роберт Лафоре представляет принципиальные понятия, которые формируют основу объектно-ориентированного программирования: В книге множество полезных иллюстраций. Более ста упражнений, с помощью которых можно проверить знания по всем темам. ");
        $book1->setNumberPages(950);
        $book1->setNameEdition("Питер");
        $book1->setYearEdition(2013);
        $book1->setPrice(480);
        $book1->setImage("book.jpg");
        $book1->setBookType($this->getReference("bookType-1"));

        $book2 = new Book();
        $book2->setName("Приемы объектно-ориентированного проектирования");
        $book2->setAuthor("Эрих Гамма, Ричард Хелм, Ральф Джонсон, Джон Влиссидес");
        $book2->setDescription("Эта книга – полезный и необходимый справочник. Паттерны проектирования книга, которую 90% разработчиков считают лучшей, из всех книг, написанных на эту тематику. Авторы, которых называют \"великолепной четверкой\", представили оптимальные решения наиболее распространенных задач, связанных с проектированием. Паттерны повышают гибкость, дают возможность повторного применения программ. Паттерны используются практически везде – в архитектуре, электронике, музыке, литературе, живописи, спорте, медицине, политике, и т.д. Паттерны обеспечивают");
        $book2->setNumberPages(380);
        $book2->setNameEdition("Питер");
        $book2->setYearEdition(2014);
        $book2->setPrice(190);
        $book2->setImage("book.jpg");
        $book2->setBookType($this->getReference("bookType-1"));

        $book3 = new Book();
        $book3->setName("Совершенный код");
        $book3->setAuthor("Стив Макконнелл");
        $book3->setDescription("Лучшее практическое руководство по программированию, не зависимо от применяемого в работе языка. Стив Макконнелл главный инженер-программист Construx Software, автор книг по программированию. Лауреат нескольких премий. Совершенный код Стива Макконнелла помогает разработчикам создавать программное обеспечение на протяжении десяти лет. Это полностью обновленное издание классической книги с учетом всех новинок, новыми образцами, иллюстрирующими код, ясное прагматичное руководство. Книга стимулирует мышление и поможет построить код самого высокого качества.");
        $book3->setNumberPages(890);
        $book3->setNameEdition("Питер");
        $book3->setYearEdition(2015);
        $book3->setPrice(650);
        $book3->setImage("book.jpg");
        $book3->setBookType($this->getReference("bookType-1"));


        $book4 = new Book();
        $book4->setName("PHP: объекты, шаблоны и методики программирования");
        $book4->setAuthor("Мэтт Зандстра");
        $book4->setDescription("Книга обобщает лучшие методики проектирования кода. Цель книги Мэтта Зандстра PHP – научить разрабатывать безупречные программные системы.. Мэтт Зандстра – известный веб-программист, автор книг. Один из главных разработчиков компании Yahoo!Книга поможет освоить принципы и шаблоны проектирования, делающие модели более мощными. Автор рассматривает классические паттерны проектирования, приводит простые и последовательные примеры, объясняет методы управления несколькими разработчикам Subversion, рассказывает о разработке, установке, стратегии автоматизации тестирования и зданий.");
        $book4->setNumberPages(450);
        $book4->setNameEdition("Питер");
        $book4->setYearEdition(2012);
        $book4->setPrice(510);
        $book4->setImage("book.jpg");
        $book4->setSlider(true);
        $book4->setBookType($this->getReference("bookType-1"));

        $book5 = new Book();
        $book5->setName("PHP. Рецепты программирования");
        $book5->setDescription("В книге представлены решения самых распространенных задач на РНР. Сведения, изложенные Дэвидом Скляром и Адамом Трахтенбергом интересны для каждого разработчика. Речь идет о базовых типах данных, операциях с ними; файлах cookie; функциях РНР; аутентификации пользователей; работе со слоями; вопросах безопасности; ускорении работы программ; работе в сети; создании графических изображений; обработке ошибок; отладке сценариев и создании тестов. Авторы предлагают рецепты, которые связаны с основами объектно-ориентированного программирования и новыми функциональными возможностями РНР. Каждый из этих рецептов полностью показывает путь решения задачи и может использоваться отдельно.");
        $book5->setAuthor("Дэвид Скляр, Адам Трахтенберг");
        $book5->setNumberPages(710);
        $book5->setNameEdition("Питер");
        $book5->setYearEdition(2016);
        $book5->setPrice(770);
        $book5->setImage("book.jpg");
        $book5->setBookType($this->getReference("bookType-1"));

        $book6 = new Book();
        $book6->setName("Java. Библиотека профессионала, том 1. Основы");
        $book6->setDescription("В книге представлена программная платформа этого языка программирования, характерные особенности, цели и достоинства, аплет Java и Internet. Это язык простой, безопасный и надежный, с четкими синтаксическими правилам и понятной семантикой. В книге рассказывается о новых средствах и усовершенствованиях языка. Java библиотека профессионала том 1рассказывает о фундаментальных концепциях языка и основах программирования пользовательского интерфейса.. Авторы сосредоточились на основных понятиях языка и версии платформы Java SE 6. Рассматривается программирование графики, развертывание приложений, архитектура коллекций. В дополнение к правилам языка, авторы дают рекомендации по правильному объектно-ориентированном дизайну");
        $book6->setAuthor("Кей С. Хорстманн, Гари Корнелл");
        $book6->setNumberPages(860);
        $book6->setNameEdition("Питер");
        $book6->setYearEdition(2015);
        $book6->setPrice(770);
        $book6->setImage("book.jpg");
        $book6->setBookType($this->getReference("bookType-1"));

        $this->addReference('book-1', $book1);
        $this->addReference('book-2', $book2);
        $this->addReference('book-3', $book3);
        $this->addReference('book-4', $book4);
        $this->addReference('book-5', $book5);
        $this->addReference('book-6', $book6);

        $manager->persist($book1);
        $manager->persist($book2);
        $manager->persist($book3);
        $manager->persist($book4);
        $manager->persist($book5);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}