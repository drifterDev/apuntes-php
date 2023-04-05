<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Includes</title>
</head>
<body>
  <!--REQUIRE FUNCIONA COMO EL INCLUDE SOLO QUE EL INCLUDE AUNQUE ESTE MAL, EJECUTA LA PAGINA-->
  <!--EL INCLUDE_ONCE SOLO REGRESA UNA SOLA VEZ LA IMPORTACION-->
  <?php
  include 'includes/cabecera.php';
  include_once 'includes/cabecera.php';
  ?>
  <div class="contenido">
    <h2>Esta es la pagina de inicio</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus dolor doloremque vero alias excepturi totam asperiores sed error ea iusto nesciunt accusantium, aspernatur nam repellendus quod voluptatum quas dignissimos voluptates.
    Minima eligendi neque explicabo voluptate quidem, aut optio odio aspernatur praesentium, itaque obcaecati vitae labore amet architecto molestias, perspiciatis autem quod magni eum. Nisi fugit sit repellat, dignissimos repudiandae quo.
    Neque commodi expedita dolorem ex porro eveniet! Maiores, ad. Corporis, at vitae ratione architecto exercitationem deleniti similique maxime quos saepe nulla eligendi eius expedita dignissimos mollitia cum veritatis neque placeat.
    Laboriosam culpa harum cupiditate odio dolor ab earum doloribus provident aperiam molestiae. Doloribus perferendis illo, quae blanditiis quasi adipisci ratione quibusdam dolor sit aliquam architecto. Quam tenetur optio fugiat ducimus?
    Dolore perspiciatis amet officiis! Nostrum fuga delectus officiis tenetur, quo est dolores, sit porro ab doloribus consequatur accusamus numquam excepturi modi minus dignissimos aut inventore unde voluptatum! Eius, officia quos.
    Quas, voluptates veritatis sequi impedit consequuntur esse voluptas repellendus. Beatae iusto aliquam doloribus. A tempore aliquam praesentium cupiditate inventore? Quisquam maxime exercitationem molestias quo omnis earum, inventore obcaecati quam sequi?
    Obcaecati maiores perferendis eaque deleniti minus quo saepe quisquam aliquam dicta distinctio. Voluptatibus vitae expedita laborum repellat enim, sapiente culpa! Placeat eos consectetur sint, iusto suscipit quam cumque fugit doloremque?
    Impedit eos aliquid, totam ea optio maxime culpa sed consequatur dolor atque animi dolorum id fugiat ullam quos porro doloremque distinctio! Deserunt, tenetur amet nam animi delectus ullam quidem similique?</p>
  </div><hr/>
  <?php include 'includes/footer.php';?>

</body>
</html>