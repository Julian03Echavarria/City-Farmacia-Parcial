<?php
// Mockup de Categorías
$categorias = [
    1 => ['id' => 1, 'nombre' => 'Cuidado Personal', 'descripcion' => 'Productos para higiene y cuidado diario', 'productos_count' => 6],
    2 => ['id' => 2, 'nombre' => 'Dermocosmética', 'descripcion' => 'Tratamientos faciales, protectores y cremas', 'productos_count' => 4],
    3 => ['id' => 3, 'nombre' => 'Farmacia y Medicamentos', 'descripcion' => 'Venta libre y artículos de botiquín', 'productos_count' => 5],
    4 => ['id' => 4, 'nombre' => 'Bebés y Maternidad', 'descripcion' => 'Pañales, accesorios y fórmulas', 'productos_count' => 3],
];

// Mockup de Marcas
$marcas = [
    1 => ['id' => 1, 'nombre' => 'Dermaglós', 'origen' => 'Argentina', 'productos_count' => 6],
    2 => ['id' => 2, 'nombre' => 'La Roche-Posay', 'origen' => 'Francia', 'productos_count' => 4],
    3 => ['id' => 3, 'nombre' => 'L\'Oréal Paris', 'origen' => 'Francia', 'productos_count' => 5],
    4 => ['id' => 4, 'nombre' => 'Nivea', 'origen' => 'Alemania', 'productos_count' => 7],
];

// Mockup de Usuarios
$usuarios_admin = [
    ['id' => 1, 'nombre' => 'Administrador General', 'email' => 'admin@cityfarmac.com', 'perfil' => 'Administrador', 'estado' => 'Activo'],
    ['id' => 2, 'nombre' => 'Julián Editor', 'email' => 'julian@cityfarmac.com', 'perfil' => 'Editor', 'estado' => 'Activo'],
    ['id' => 3, 'nombre' => 'María Cliente', 'email' => 'maria@correo.com', 'perfil' => 'Cliente', 'estado' => 'Inactivo'],
];

// Mockup de Perfiles
$perfiles_admin = [
    ['id' => 1, 'nombre' => 'Administrador', 'permisos' => 'Acceso total a productos, categorías, marcas, comentarios, usuarios y perfiles.'],
    ['id' => 2, 'nombre' => 'Editor', 'permisos' => 'Gestión de productos, categorías y moderación de comentarios.'],
    ['id' => 3, 'nombre' => 'Cliente', 'permisos' => 'Acceso únicamente a la vista pública y perfil propio.'],
];

// Mockup de Comentarios
$comentarios_admin = [
    ['id' => 1, 'producto' => 'Crema Hidratante Facial', 'usuario' => 'María Gómez', 'puntaje' => 5, 'mensaje' => 'Excelente producto, mi piel se nota mucho más hidratada.', 'estado' => 'Aprobado', 'fecha' => '2026-10-05'],
    ['id' => 2, 'producto' => 'Protector Solar SPF 50', 'usuario' => 'Carlos Pérez', 'puntaje' => 4, 'mensaje' => 'Muy bueno, no deja la piel grasa aunque es un poco espeso.', 'estado' => 'Pendiente', 'fecha' => '2026-10-06'],
    ['id' => 3, 'producto' => 'Shampoo Fortalecedor', 'usuario' => 'Lucía Fernández', 'puntaje' => 1, 'mensaje' => 'No me sirvió para nada, me dejó el pelo reseco.', 'estado' => 'Rechazado', 'fecha' => '2026-10-04'],
];


// Mockup de Productos
$productos_destacados = [
    [
        'id' => 1,
        'nombre' => 'Crema Hidratante Facial',
        'marca' => 'Dermaglós',
        'modelo' => 'Fórmula Rostro 50ml',
        'precio' => 12500.00,
        'imagen' => 'crema.webp',
        'categoria' => 'Cuidado Personal',
        'descripcion' => 'Crema hidratante de uso diario para todo tipo de piel. Aporta suavidad y nutrición profunda.',
        'comentarios' => [
            ['usuario' => 'María Gómez', 'puntaje' => 5, 'mensaje' => 'Excelente producto, mi piel se nota mucho más hidratada.'],
            ['usuario' => 'Juan Pérez', 'puntaje' => 4, 'mensaje' => 'Muy buena relación precio-calidad. La recomiendo.']
        ]
    ],
    [
        'id' => 2,
        'nombre' => 'Protector Solar SPF 50',
        'marca' => 'La Roche-Posay',
        'modelo' => 'Anthelios Toque Seco 50ml',
        'precio' => 28900.00,
        'imagen' => 'protector.jpg',
        'categoria' => 'Dermocosmética',
        'descripcion' => 'Protección solar de amplio espectro con acabado toque seco, ideal para pieles mixtas a grasas.',
        'comentarios' => [
            ['usuario' => 'Carlos Pérez', 'puntaje' => 4, 'mensaje' => 'Muy bueno, no deja la piel grasa.'],
            ['usuario' => 'Ana Gómez', 'puntaje' => 5, 'mensaje' => 'Excelente protección para todo el día.']
        ]
    ],
    [
        'id' => 3,
        'nombre' => 'Shampoo Reparación Intensa',
        'marca' => 'L\'Oréal Paris',
        'modelo' => 'Elvive Óleo Extraordinario 400ml',
        'precio' => 6400.00,
        'imagen' => 'shampoo.webp',
        'categoria' => 'Capilar',
        'descripcion' => 'Nutrición intensa para cabellos secos o dañados. Devuelve el brillo y la suavidad natural.',
        'comentarios' => [
            ['usuario' => 'Lucía Fernández', 'puntaje' => 3, 'mensaje' => 'Cumple su función, aunque el aroma es algo fuerte.'],
            ['usuario' => 'Sonia R.', 'puntaje' => 5, 'mensaje' => 'Me dejó el pelo suave desde el primer lavado.']
        ]
    ],
    [
        'id' => 4,
        'nombre' => 'Perfume Aqua Elegance 100ml',
        'marca' => 'Antonio Banderas',
        'modelo' => 'Eau de Toilette',
        'precio' => 45000.00,
        'imagen' => 'perfume.webp',
        'categoria' => 'Perfumería',
        'descripcion' => 'Fragancia fresca y envolvente con notas de madera y cítricos. Ideal para el uso diario.',
        'comentarios' => [
            ['usuario' => 'Roberto M.', 'puntaje' => 5, 'mensaje' => 'Aroma duradero e impecable para regalar.']
        ]
    ],
    [
        'id' => 5,
        'nombre' => 'Sérum Ácido Hialurónico',
        'marca' => 'Vichy',
        'modelo' => 'Liftactiv Supreme 30ml',
        'precio' => 32000.00,
        'imagen' => 'serum.webp',
        'categoria' => 'Dermocosmética',
        'descripcion' => 'Sérum rellenador con alta concentración de ácido hialurónico para reducir arrugas y líneas de expresión.',
        'comentarios' => [
            ['usuario' => 'Laura K.', 'puntaje' => 5, 'mensaje' => 'Se absorbe rápido y deja la piel súper tersa.']
        ]
    ],
    [
        'id' => 6,
        'nombre' => 'Jabón Líquido Exfoliante',
        'marca' => 'Nivea',
        'modelo' => 'Shower Scrub 250ml',
        'precio' => 4200.00,
        'imagen' => 'jabon.webp',
        'categoria' => 'Cuidado Personal',
        'descripcion' => 'Limpia suavemente mientras remueve células muertas, dejando la piel suave y renovada.',
        'comentarios' => [] // Producto sin comentarios para probar la validación
    ]
];