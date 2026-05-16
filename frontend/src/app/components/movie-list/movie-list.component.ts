import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MovieService } from '../../services/movie.service';

@Component({
  selector: 'app-movie-list',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './movie-list.component.html',
  styleUrl: './movie-list.component.css'
})
export class MovieListComponent implements OnInit {
  // El contenedor donde guardaremos las películas que nos traiga el servicio
  movies: any[] = [];

  // Contratamos al servicio mensajero
  constructor(private movieService: MovieService) {}

  // render
  ngOnInit(): void {
    this.movieService.getMovies().subscribe({
      next: (data) => {
        this.movies = data;
        console.log('Datos:', data)
       }, error: (err) => {
        console.error('Error al conectar con Laravel:', err);
      }

    });

}}